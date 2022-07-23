var courses = [{
        id: 1,
        name: 'Javascript',
        coin: 0,
    },
    {
        id: 2,
        name: 'HTML,css',
        coin: 0,
    },
    {
        id: 1,
        name: 'PHP',
        coin: 0,
    },
    {
        id: 1,
        name: 'NodeJs',
        coin: 1,
    },
];
Array.prototype.every2 = function(callback){
    var output = true;
    for(var i in this){
        if(this.hasOwnProperty(i)){
            if(!callback(this[i],i)){
                output = false;
                break;
            }
        }
    }
    return output;
}
var result = courses.every2(function(course,index){
    return course.coin == 0;
});
console.log(result);

