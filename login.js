var objPeople =[
    {
        username: "peem",
        password : "12345"
    },
    { 
        username: "john",
        password : "doe"
    }
];
function getInfo(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    for(i = 0; i<objPeople.length; i++){
        if(username == objPeople[i].username && password == objPeople[i].password){
            console.log(username + " is logged in")
            return false;
        }         
    }
    console.log(" incorrect username and password")

}