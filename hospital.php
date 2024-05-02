<html>
    <head><style>

*{
    
    font-family: Georgia, 'Times New Roman', Times, serif;
}
body{
    /* background-image:url("background3.jpg"); */
    background-color:aliceblue;
    /* background-blend-mode:overlay; */
    background-size:contain;
   

}
a{
    text-decoration:none;
}
a:hover{
    color: red;
    transform: scale(2,2);
   
}
    
header{
    background-color: white;
    position:sticky;
    top:0px;
   
    height:80px;
    width:100%;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);
}
.container{
    background-color: white;
     display:flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction:column;
 
}
.headingitems{
   
    display:flex;

    justify-content: space-evenly;
}
.navlogo img{
  float:left;
    height:50px;
    width:50px;
}

.header.item:hover{
    border-bottom: 3px red;
    border-top:3px red;
    transition: .10s;
}
.medium{
    display:flex;
justify-content:space-between;
align-items: center;
animation-name:picani;
animation-duration:120s;  
    animation-delay: 1s;
    animation-fill-mode:backwards;
 
    
}
.pic{
    margin-top: 50px;
    height:350px;
    width:350px;
   
  
   
}
.pic:active{
    transform: scale(2,2);
}
.pic img{
    height:300px;
    width:300px;
}
@keyframes picani {
    from{
        translate: 0px 0px;
    }
    to{
        translate:2000px 0px;
    }
    
}

.contain{
  
    display:flex;
    flex-direction: row;
    justify-content: space-evenly;


}
.div1,.div2,.div3{
    background-color: white;
    height:400px;
    width:400px;
    border:2px solid white;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);

}
.menu{
    background-color:white;
    height:300px;
    width:200px;
    display:flex;
    flex-direction:column;
    justify-content: flex-start;
   
    box-shadow: 0px 2px 8px rgba(0,0,0,50%);
}
.menu ul,li{
    text-decoration: none;
    text-decoration-color: aliceblue;
}
.right{
    text-align: center;
    margin-top: 15px;
    background-color:white;
    height:300px;
    width:800px;  
    box-shadow: 0px 2px 8px rgba(0,0,0,50%);
 
}
.hey{
    display:flex;
    flex-direction: row;
    justify-content: space-evenly;
}
.div1,.div2,.div3{
    display:flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-content: space-evenly;
}
.last{
    background-color: white;
   text-align: center;
   align-items: center;
    bottom:0px;;
    margin-top:40px;
    width:100%;
    height:60px;
    box-shadow: 0px 2px 8px rgba(0,0,0,50%);
    display:flex;
    justify-content: space-between;
    flex-direction: row;
}
.last img{
    height:50px;
    width:50px;
}
/* login.html  */
.login{
    height:500px;
    width:500px;
    display:flex;
    flex-direction:column;
    justify-content: space-evenly;
    background-color: azure;
    box-shadow:0px 2px 8px rgba(0,0,0,25%); 
    margin-top: 10%;
    padding:20px;
    margin-left: 30%;
    align-items: center;
    margin-bottom: 30px;
 }
 /* DEpartment.html */
.department{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(270px,1fr));

   margin-top:80px;
   
    
   

}
.heding{
    margin-top:50px;
   text-align: center;
  
 
}
.depart{
    
    height:300px;
    width:300px;
   
    background-blend-mode: soft-light;
 
    margin:20px;
  text-align:center;
 
   text-shadow:0px 2px 8px rgba(0,0,0,25%); 
    box-shadow:0px 2px 8px rgba(0,0,0,25%); 
}
button {
    background-color: blue;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.depart:active{
    transform: scale(2,2);
}
#d1{
    background-image:url("anesthesia.webp");
    background-size: contain;
}
#d2{
    background-image:url("cancer.webp");
    background-size: contain; 
}
#d4{
    background-image:url("ent.jpg");
    background-size: contain; 
}
#d5{
    background-image:url("dermato.jpg");
    background-size: contain; 
}
#d6{
    background-image:url("dentistry.jpg");
    background-size: contain; 
}
#d7{
    background-image:url("comprehensive.png");
    background-size: contain; 
}
#d8{
    background-image:url("critical.png");
    background-size: contain; 
}
#d9{
    background-image:url("colorectal.jpg");
    background-size: contain; 
}
#d10{
    background-image:url("clinical.jpg");
    background-size: contain; 
}
#d11{
    background-image:url("chiropratic.png");
    background-size: contain; 
}
#d12{
    background-image:url("cardio.jpg");
    background-size: contain; 
}
#d13{
    background-image:url("cardiology.png");
    background-size: contain; 
}
#d14
{
    background-image:url("emergency.png");
    background-size: contain; 
}
#d15{
    background-image:url("neurology.png");
    background-size: contain; 
}
#d16{
    background-image:url("neurosurgery.jpg");
    background-size: contain; 
}
/* appontment.html */
#con{
    display:flex;
    flex-direction:row-reverse;
    justify-content: space-evenly;
    height:1000px;
    width:100%;

}
.appoint{
    background-color:azure;
    margin:50px;

  padding-left: 15px;;
    padding-top:100px;
    height:300px;
    width:300px;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);
    text-align: center;
               
 
}
.package{
    background-color:azure;
    margin:50px;

  padding-left: 15px;;
    padding-top:100px;
    height:300px;
    width:300px;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);
    text-align: center;
               
 
}
button {

margin-top: 10px;
    background-color: blue;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* contact */
.contact{
    display:flex;
    justify-content:space-evenly ;
    flex-direction: row;
}
.contact i{
    height:50px;
    width:50px;
}
.diva,.divb,.divc,.divd{
    padding-top:50px;
    height:300px;
   width:300px;
    background-color: aliceblue;
    box-shadow: 0px 2px 8px rgba(0,0,0,50%);
    text-align: center;
  margin-top:20px;
  margin-bottom: 20px;

}
.coo{
        height:400px;
        width:600px;
        background-color: white;
         display:flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction:column;
     
    
}
form{
    align-items:center;
}
</style>
</head>
</html>
