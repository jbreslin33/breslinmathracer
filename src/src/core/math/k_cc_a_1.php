
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_2',0.0102,'k.cc.a.1','Count to 100 by tens');
*/
var i_k_cc_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,375,95, 700,50,400,200);

        this.mType = 'k.cc.a.1_2';
        this.mStripCommas = false;

        this.setQuestion('Count to 100 by tens starting at ten and seperating each number by a comma.');
        this.setAnswer('' + '10,20,30,40,50,60,70,80,90,100',0);
}
});

/* 
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_1',0.0101,'k.cc.a.1','Count to 100 by ones');
*/
var i_k_cc_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,375,95, 700,50,400,200);

        this.mType = 'k.cc.a.1_1';
	this.mStripCommas = false;

        this.setQuestion('Count to 100 starting at 1 and seperating each number by a comma.');
        this.setAnswer('' + '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100',0);
},

showUserAnswer: function()
{
	if (this.mUserAnswerLabel)
        {
		var a = this.mUserAnswer.substring(0,21);
		var b = this.mUserAnswer.substring(21,51);
		var c = this.mUserAnswer.substring(51,81);
		var d = this.mUserAnswer.substring(81,111);
		var e = this.mUserAnswer.substring(111,141);
		var f = this.mUserAnswer.substring(141,171);
		var g = this.mUserAnswer.substring(171,201);
		var h = this.mUserAnswer.substring(201,231);
		var i = this.mUserAnswer.substring(231,261);
		var j = this.mUserAnswer.substring(261,291);
		var k = this.mUserAnswer.substring(291,321);

                this.mUserAnswerLabel.setText('USER ANSWER: ' + a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g + ' ' + h + ' ' + i + ' ' + j + ' ' + k);
                this.mUserAnswerLabel.setVisibility(true);
        }
},

showCorrectAnswer: function()
{
        if (this.mCorrectAnswerLabel)
        {
		var answer = this.getAnswer();
  		var a = answer.substring(0,21);
                var b = answer.substring(21,51);
                var c = answer.substring(51,81);
                var d = answer.substring(81,111);
                var e = answer.substring(111,141);
                var f = answer.substring(141,171);
                var g = answer.substring(171,201);
                var h = answer.substring(201,231);
                var i = answer.substring(231,261);
                var j = answer.substring(261,291);
                var k = answer.substring(291,321);

                this.mCorrectAnswerLabel.setText('USER ANSWER: ' + a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g + ' ' + h + ' ' + i + ' ' + j + ' ' + k);
                this.mCorrectAnswerLabel.setVisibility(true);
                
		this.hideAnswerInputs();
                this.showUserAnswer();
        }
}
});

