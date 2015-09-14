// js/models/todo.js
var app = app || {};
// модель задачи
// ----------
app.Products = Backbone.Model.extend({
	defaults: {
		id: '0',
		catalog: 'phones',
		img: 'images/phones.png',
		title: 'Product title',
		price: '0.00'
	}
});