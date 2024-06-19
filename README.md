Add contractor:
POST [/]  
Request:  
Body:{
"name": "dog",
"inn": "1234567894",
"email": "dog@mail.ru"
}   
Response:   
{
"id": 6,
"name": "dog",
"inn": "1234567894",
"email": "dog@mail.ru"
}  
  
Get contractor:
GET [/id]  
Response:  
{
"id": 5,
"name": "cat",
"inn": "1234567893",
"email": "cat@mail.ru"
}  

Update contractor:
PUT [/update/id]  
Request:  
Body:{
"name": "bird",
}  
Response:  
{
"id": 6,
"name": "bird",
"inn": "1234567894",
"email": "dog@mail.ru"
}  

Delete contractor:
DELETE [/delete/id]  
Response: "Contractor deleted"  

List contractor:
POST: [/list]  
Response:  
{
"contractors":  
[
{
"id": 3,
"name": "fura",
"inn": "1234567891",
"email": "firma@mail.ru"
},  
{
"id": 4,
"name": "car",
"inn": "1234567892",
"email": "car@mail.ru"
},  
{
"id": 5,
"name": "cat",
"inn": "1234567893",
"email": "cat@mail.ru"
}
]  
}


