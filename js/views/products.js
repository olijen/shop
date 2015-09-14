// js/views/todos.js
var app = app || {};
// представление задачи
// --------------
app.ProductsView = Backbone.View.extend({
	
	tagName: 'div',
	className: 'product col-sm-4',
	
	template: _.template( $('#product-template').html() ),
	
	render: function() {
		this.$el.html( this.template( this.model.toJSON() ) );
		return this;
	}
});