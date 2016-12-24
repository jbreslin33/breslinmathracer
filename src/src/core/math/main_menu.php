var main_menu = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '';

                this.setQuestion('Welcome to Mathcore! Menu is in drop down at top left.');

                this.setAnswer('',0);
        }
});

