var data = {
  "title": "Person",
  "type": "object",
  "properties": {
    "firstName": {
      "type": "string"
    },
    "lastName": {
      "type": "string"
    },
    "age": {
      "description": "Age in years",
      "type": "integer",
      "minimum": 0
    }
  },
  "required": ["firstName", "lastName"]
};

$(document).ready(function() {
  function format_for_treeview(data, arr) {
    for (var key in data) {
      if (Array.isArray(data[key]) || data[key].toString() === "[object Object]") {
        // when data[key] is an array or object
        var nodes = [];
        var completedNodes = format_for_treeview(data[key], nodes);
        arr.push({
          text: key,
          nodes: completedNodes
        });
      } else {
        // when data[key] is just strings or integer values
        arr.push({
          text: key + " : " + data[key]
        });
      }
    }
    return arr;
  }


  $("#my-treeview").treeview({
    color: "#428bca",
    expandIcon: "glyphicon glyphicon-stop",
    collapseIcon: "glyphicon glyphicon-unchecked",
    showTags: true,
    data: format_for_treeview(data, [])
  });

});