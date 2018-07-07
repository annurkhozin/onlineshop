$(function() {
  var base_url = 'http://localhost:8080/onlineshop/'; console.log(base_url);
  $.ajax({
    type: "GET",
    url: base_url+"Admin/getAllContact/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: base_url+"Admin/getAllContact/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addContact/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: base_url+"Admin/updateContact/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteContact/",
            data: item
          });
        }
      },
      fields: [
        
        {
          name: "aplikasi",
          title: "Aplikasi",
          type: "text",
          width: 150
        },
        {
          name: "name",
          title: "Nama",
          type: "text",
          width: 50
        },
        {
          name: "number",
          title: "Nomor",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
