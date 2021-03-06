editAreaLoader.init({
    id: "example_1"	// id of the textarea to transform		
    ,start_highlight: true	// if start with highlight
    ,allow_resize: "both"
    ,allow_toggle: true
    ,word_wrap: true
    ,language: "en"
    ,syntax: "php"	
});

editAreaLoader.init({
    id: "example_2"	// id of the textarea to transform	
    ,start_highlight: true
    ,allow_toggle: false
    ,language: "en"
    ,syntax: "html"	
    ,toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, syntax_selection, |, change_smooth_selection, highlight, reset_highlight, |, help"
    ,syntax_selection_allow: "css,html,js,php,python,vb,xml,c,cpp,sql,basic,pas,brainfuck"
    ,is_multi_files: true
    ,EA_load_callback: "editAreaLoaded"
    ,show_line_colors: true
});

editAreaLoader.init({
    id: "example_3"	// id of the textarea to transform	
    ,start_highlight: true	
    ,font_size: "8"
    ,font_family: "verdana, monospace"
    ,allow_resize: "y"
    ,allow_toggle: false
    ,language: "fr"
    ,syntax: "css"	
    ,toolbar: "new_document, save, load, |, charmap, |, search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help"
    ,load_callback: "my_load"
    ,save_callback: "my_save"
    ,plugins: "charmap"
    ,charmap_default: "arrows"
        
});

editAreaLoader.init({
    id: "example_4"	// id of the textarea to transform		
    //,start_highlight: true	// if start with highlight
    //,font_size: "10"	
    ,allow_resize: "no"
    ,allow_toggle: true
    ,language: "de"
    ,syntax: "python"
    ,load_callback: "my_load"
    ,save_callback: "my_save"
    ,display: "later"
    ,replace_tab_by_spaces: 4
    ,min_height: 350
});

// callback functions
function my_save(id, content){
    alert("Here is the content of the EditArea '"+ id +"' as received by the save callback function:\n"+content);
}

function my_load(id){
    editAreaLoader.setValue(id, "The content is loaded from the load_callback function into EditArea");
}

function test_setSelectionRange(id){
    editAreaLoader.setSelectionRange(id, 100, 150);
}

function test_getSelectionRange(id){
    var sel =editAreaLoader.getSelectionRange(id);
    alert("start: "+sel["start"]+"\nend: "+sel["end"]); 
}

function test_setSelectedText(id){
    text= "[REPLACED SELECTION]"; 
    editAreaLoader.setSelectedText(id, text);
}

function test_getSelectedText(id){
    alert(editAreaLoader.getSelectedText(id)); 
}

function editAreaLoaded(id){
    if(id=="example_2")
    {
        open_file1();
        open_file2();
    }
}

function open_file1()
{
    var new_file= {id: "to\\ é # € to", text: "$authors= array();\n$news= array();", syntax: 'php', title: 'beautiful title'};
    editAreaLoader.openFile('example_2', new_file);
}

function open_file2()
{
    var new_file= {id: "Filename", text: "<a href=\"toto\">\n\tbouh\n</a>\n<!-- it's a comment -->", syntax: 'html'};
    editAreaLoader.openFile('example_2', new_file);
}

function close_file1()
{
    editAreaLoader.closeFile('example_2', "to\\ é # € to");
}

function toogle_editable(id)
{
    editAreaLoader.execCommand(id, 'set_editable', !editAreaLoader.execCommand(id, 'is_editable'));
}