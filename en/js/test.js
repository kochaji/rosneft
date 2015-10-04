$(function(){

	$('.js-panel').removeClass('top');

	function fitTest() {
		$('.js-test-screen').height( $(window).height() - $('.js-panel').outerHeight(true) )
	}

	//fitTest();


	var TestApp = function(element) {
		this.defaults = {
			script: 'ajax.php'
		};
		this.$element = $(element);
		this.init();
	};
	TestApp.prototype = {
		calcResult: function() {
			var _this = this;
			this.$element.addClass('in-results').removeClass('in-progress')
			this.parts.scores.html(this.scores)
			this.parts.scoresTotal.html(this.total);

			$('.social-likes').socialLikes({
				title: 'Я ответил на ' + _this.scores + ' вопросов из ' + _this.total
			})
		},
		checkQuestion: function(element) {
			console.log(this.current , this.total)
			this.$element[ this.current == this.total-1 ? 'addClass' : 'removeClass' ]('in-last');
			this.clickable = false;

			var checked = $(element).index();
			var correct = this.item.correct - 1;

			this.$element.addClass('checked').removeClass('wait');
			$(element).addClass('checked').addClass( checked == correct ? '' : 'fail');
			this.parts.answers.find('.js-test-answer').eq(correct).addClass('success');
			this.current++;
			checked == correct && this.scores++;
			this.parts.text.slideDown();

		},
		renderAnswers: function() {
			var data = this.item.answers;
			var result = [];
			var _this = this;
			$.each(data, function(i, text) {
				var answer = _this.answerTMPL.replace(/%answer%/g, text)
				result.push(answer)
			});
			return result.join('');
		},
		renderQuestion: function() {
			this.$element.removeClass('checked').addClass('wait');
			var _this = this;
			if (this.current == this.total) {	
				this.calcResult();
				return;
			}
			//console.log(this.current, this.total)

			this.item = this.data[this.current]
			var _this = this;
			this.parts.question.html('');

			this.parts.question.html(this.item.question);


			this.parts.text.hide();

			_this.parts.text.html(_this.item.text);

			this.parts.total.html(this.total);
			this.parts.current.html(this.current + 1 );
			this.parts.answers.html(this.renderAnswers());
			this.clickable = true;
		},
		start: function() {
			this.$element.addClass('in-progress').removeClass('in-results')
			this.current = 0;
			this.renderQuestion();
			this.scores = 0;
		},
		init: function() {
			var _this = this;
			this.parts = {
				question: 	 this.$element.find('.js-test-question'),
				answers: 	 this.$element.find('.js-test-answers'),
				answer: 	 this.$element.find('.js-test-answer'),
				current: 	 this.$element.find('.js-test-current'),
				total: 		 this.$element.find('.js-test-total'),
				text: 		 this.$element.find('.js-test-text'),
				next: 		 this.$element.find('.js-test-next'),
				scores:  	 this.$element.find('.js-test-scores'),
				scoresTotal: this.$element.find('.js-test-scores-total'),
				startBtn: 	 this.$element.find('.js-test-start')
			};

			this.clickable = true;

			$(document).on('click', '.js-test-answer', function(e){
				e.preventDefault();
				_this.clickable && _this.checkQuestion(this)
			});

			this.parts.next.on('click', function(){
				!_this.clickable && _this.renderQuestion();
				_this.$element[ _this.current == _this.total-1 ? 'addClass' : 'removeClass' ]('in-last');
			});

			this.parts.startBtn.on('click', function(e){
				e.preventDefault();
				_this.start();
			})

			this.answerTMPL = this.parts.answer.get(0).outerHTML;
			
			$.getJSON(this.defaults.script, {action: 'getQuestions'}, function(reply) {
				_this.data = reply;
				_this.total = reply.length;
				_this.start(); 
			})
		}
	}

	var test = new TestApp('#testApp');

});