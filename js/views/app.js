// js/views/app.js
var app = app || {};

// наше приложение
// ---------------
app.AppView = Backbone.View.extend({
	el: '#catalog',
	
	initialize: function() {
		this.listenTo(app.Products, 'add', this.addOne);
	},
	addOne: function( product ) {
		var view = new app.ProductsView({ model: product });
		$('.cards .row').append( view.render().el );
	},
	addAll: function() {
		this.$('.cards .row').html('');
		app.Products.each(this.addOne, this);
	}
});