$(function() {
  var base_url = 'http://localhost:8080/onlineshop/'; console.log(base_url);
  $.ajax({
    type: "GET",
    url: base_url+"Admin/getAllAdmin/"
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
            url: base_url+"Admin/getAllAdmin/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addAdmin/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: base_url+"Admin/updateAdmin/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteAdmin/",
            data: item
          });
        }
      },
      fields: [
        
        {
          name: "fullname",
          title: "Nama",
          type: "text",
          width: 150
        },
        {
          name: "is_active",
          title: "Status",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
