// js/views/app.js
var app = app || {};

// наше приложение
// ---------------
app.AppView = Backbone.View.extend({
	el: '#catalog',
	
	initialize: function() {
		this.$main = this.$('.main');
		this.listenTo(app.Products, 'add', this.addOne);
		this.listenTo(app.Products, 'reset', this.addAll);
		// Новое
		this.listenTo(app.Products, 'all', this.render);
	},
	render: function() {
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