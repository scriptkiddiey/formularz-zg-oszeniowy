function todoList(){
    var item1 = document.getElementById("name1").value;
    var text1 = document.createTextNode(item1);
    
    var item2 = document.getElementById("name2").value;
    var text2 = document.createTextNode(item2);
    
    var item3 = document.getElementById("name3").value;
    var text3 = document.createTextNode(item3);
    
    var item4 = document.getElementById("name4").value;
    var text4 = document.createTextNode(item4);
    
    var newItem = document.createElement("li");
    newItem.appendChild(text1);
    document.getElementById("todoList").appendChild(newItem);
}