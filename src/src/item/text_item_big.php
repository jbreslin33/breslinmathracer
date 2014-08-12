/*
TextItem: this class has a bigger text area for question and answer than its parent.
*/
var TextItemBig = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet);

                this.mQuestionLabel.setSize(325,300);
                this.mQuestionLabel.setPosition(200,195);
                this.mAnswerTextBox.setPosition(525,75);
                this.mAnswerTextBox.setSize(200,50);
	}
});
