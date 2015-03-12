var UITree = function () {

    var handleSample1 = function () {

        $('#tree_1').jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                }            
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "plugins": ["types"]
        });

        // handle link clicks in tree nodes(support target="_blank" as well)
        $('#tree_1').on('select_node.jstree', function(e,data) { 
            var link = $('#' + data.selected).find('a');
            if (link.attr("href") != "#" && link.attr("href") != "javascript:;" && link.attr("href") != "") {
                if (link.attr("target") == "_blank") {
                    link.attr("href").target = "_blank";
                }
                document.location.href = link.attr("href");
                return false;
            }
        });
    }

    var handleSample2 = function () {
        $('#tree_2').jstree({
            'plugins': ["wholerow", "checkbox", "types"],
            'core': {
                "themes" : {
                    "responsive": false
                },    
                'data': [{
                        "text": "Same but with checkboxes",
                        "children": [{
                            "text": "initially selected",
                            "state": {
                                "selected": true
                            }
                        }, {
                            "text": "custom icon",
                            "icon": "fa fa-warning icon-state-danger"
                        }, {
                            "text": "initially open",
                            "icon" : "fa fa-folder icon-state-default",
                            "state": {
                                "opened": true
                            },
                            "children": ["Another node"]
                        }, {
                            "text": "custom icon",
                            "icon": "fa fa-warning icon-state-warning"
                        }, {
                            "text": "disabled node",
                            "icon": "fa fa-check icon-state-success",
                            "state": {
                                "disabled": true
                            }
                        }]
                    },
                    "And wholerow selection"
                ]
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            }
        });
    }

    var contextualMenuSample = function() {

        $("#tree_3").jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                }, 
                // so that create works
                "check_callback" : true,
                'data': [{
                        "text": "Parent Node",
                        "children": [{
                            "text": "Initially selected",
                            "state": {
                                "selected": true
                            }
                        }, {
                            "text": "Custom Icon",
                            "icon": "fa fa-warning icon-state-danger"
                        }, {
                            "text": "Initially open",
                            "icon" : "fa fa-folder icon-state-success",
                            "state": {
                                "opened": true
                            },
                            "children": [
                                {"text": "Another node", "icon" : "fa fa-file icon-state-warning"}
                            ]
                        }, {
                            "text": "Another Custom Icon",
                            "icon": "fa fa-warning icon-state-warning"
                        }, {
                            "text": "Disabled Node",
                            "icon": "fa fa-check icon-state-success",
                            "state": {
                                "disabled": true
                            }
                        }, {
                            "text": "Sub Nodes",
                            "icon": "fa fa-folder icon-state-danger",
                            "children": [
                                {"text": "Item 1", "icon" : "fa fa-file icon-state-warning"},
                                {"text": "Item 2", "icon" : "fa fa-file icon-state-success"},
                                {"text": "Item 3", "icon" : "fa fa-file icon-state-default"},
                                {"text": "Item 4", "icon" : "fa fa-file icon-state-danger"},
                                {"text": "Item 5", "icon" : "fa fa-file icon-state-info"}
                            ]
                        }]
                    },
                    "Another Node"
                ]
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo2" },
            "plugins" : [ "contextmenu", "dnd", "state", "types" ]

        });
    
    }

     var ajaxTreeSample = function() {

        $("#tree_with_context_menu").jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                }, 
                // so that create works
                "check_callback" : true,
                'data' : {
                    'url' : function (node) {
                      return 'demo/jstree_ajax_data.php';
                    },
                    'data' : function (node) {
                      return { 'parent' : node.id };
                    }
                }
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo3" },
            "plugins" : [ "contextmenu","dnd", "state", "types" ],
            "contextmenu": { "items": customMenu }

        });
    
    }

    var customMenu = function(node) {

        var tree = $('#tree_with_context_menu').jstree(true);

        var items = {
            "Create": {
                "separator_before": false,
                "separator_after": false,
                "label": "Create",
                "action": function (obj) {
                    var $node = tree.create_node(node);
                    tree.edit($node);
                    console.log(node);
                    console.log(obj);
                }
            },
            "Rename": {
                "separator_before": false,
                "separator_after": false,
                "label": "Rename",
                "action": function (obj) {
                    tree.edit(node);
                }
            },
            "Edit": {
                "separator_before": false,
                "separator_after": false,
                "label": "Edit",
                "action": function (obj) {
                    tree.edit(node);
                }
            },
            "Remove": {
                "separator_before": true,
                "separator_after": false,
                "label": "Remove",
                "action": function (obj) {
                    if(confirm('Are you sure to remove this category?')){
                        tree.delete_node(node);
                    }
                }
            },
            "Upload": {
                "separator_before": true,
                "separator_after": false,
                "label": "Upload",
                "action": function (obj) {
                    console.log('console');
                }
            }
        };

        //If node is a folder do not show the "delete" menu item
        if ($(node).hasClass("jstree-closed") || $(node).hasClass("jstree-open")) {
            delete items.remove;
        }
        if ($(node).hasClass("jstree-closed") || $(node).hasClass("jstree-open")) { //If node is a folder
            var renameLabel = "Rename Folder";
        }
        else {
            var renameLabel = "Rename File";
        }

        return items;
    }

    return {
        //main function to initiate the module
        init: function () {

            //handleSample1();
            //handleSample2();
            //contextualMenuSample();
            ajaxTreeSample();

        }

    };

}();