<html>
        <head>
            <base href="https://demos.telerik.com/kendo-ui/treeview/checkboxes"/>
            <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>
            <title></title>
            <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2016.1.112/styles/kendo.common-material.min.css" />
            <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2016.1.112/styles/kendo.material.min.css" />
        
            <script src="https://kendo.cdn.telerik.com/2016.1.112/js/jquery.min.js"></script>
            <script src="https://kendo.cdn.telerik.com/2016.1.112/js/kendo.all.min.js"></script>
        </head>
        <body>
            <div id="example">
            
                <div class="demo-section k-content">
                    <div>
                        <h4>Check nodes</h4>
                        <div id="treeview"></div>
                    </div>
                    <div style="padding-top: 2em;">
                        <h4>Status</h4>
                        <p id="result">No nodes checked.</p>
                    </div>
                </div>
            
                <script>
                    $("#treeview").kendoTreeView({
                        checkboxes: {
                            checkChildren: true
                        },
            
                        check: onCheck,
            
                        dataSource: [{
                            id: 1, text: "My Documents", expanded: true, spriteCssClass: "rootfolder", items: [
                                {
                                    id: 2, text: "Kendo UI Project", expanded: true, spriteCssClass: "folder", items: [
                                        { id: 3, text: "about.html", spriteCssClass: "html" },
                                        { id: 4, text: "index.html", spriteCssClass: "html" },
                                        { id: 5, text: "logo.png", spriteCssClass: "image" }
                                    ]
                                },
                                {
                                    id: 6, text: "New Web Site", expanded: true, spriteCssClass: "folder", items: [
                                        { id: 7, text: "mockup.jpg", spriteCssClass: "image" },
                                        { id: 8, text: "Research.pdf", spriteCssClass: "pdf" },
                                    ]
                                },
                                {
                                    id: 9, text: "Reports", expanded: true, spriteCssClass: "folder", items: [
                                        { id: 10, text: "February.pdf", spriteCssClass: "pdf" },
                                        { id: 11, text: "March.pdf", spriteCssClass: "pdf" },
                                        { id: 12, text: "April.pdf", spriteCssClass: "pdf" }
                                    ]
                                }
                            ]
                        }]
                    });
            
                    // function that gathers IDs of checked nodes
                    function checkedNodeIds(nodes, checkedNodes) {
                        for (var i = 0; i < nodes.length; i++) {
                            if (nodes[i].checked) {
                                checkedNodes.push(nodes[i].id);
                            }
            
                            if (nodes[i].hasChildren) {
                                checkedNodeIds(nodes[i].children.view(), checkedNodes);
                            }
                        }
                    }
            
                    // show checked node IDs on datasource change
                    function onCheck() {
                        var checkedNodes = [],
                            treeView = $("#treeview").data("kendoTreeView"),
                            message;
            
                        checkedNodeIds(treeView.dataSource.view(), checkedNodes);
            
                        if (checkedNodes.length > 0) {
                            message = "IDs of checked nodes: " + checkedNodes.join(",");
                        } else {
                            message = "No nodes checked.";
                        }
            
                        $("#result").html(message);
                    }
                </script>
            
                <style>
                    #treeview .k-sprite {
                        background-image: url("../content/web/treeview/coloricons-sprite.png");
                    }
            
                    .rootfolder { background-position: 0 0; }
                    .folder     { background-position: 0 -16px; }
                    .pdf        { background-position: 0 -32px; }
                    .html       { background-position: 0 -48px; }
                    .image      { background-position: 0 -64px; }
            
                </style>
            </div>
        
        
        </body>
    </html>