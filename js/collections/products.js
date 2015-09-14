// js/collections/todos.js
var app = app || {};
// Коллекция задач
// ---------------

var ProductsList = Backbone.Collection.extend({
	model: app.Products,
	url: 'api/'
});

var uri = window.location.pathname;
var uri = uri.split('/');
// uri[1] == catalog
// uri[2] == phones/laptops/tablets/accessories

// Создание глобальной коллекции задач
app.Products = new ProductsList();
if(uri[1] == "catalog") {
	app.Products.fetch({data: {catalog: uri[2]}, processData: true});
}
