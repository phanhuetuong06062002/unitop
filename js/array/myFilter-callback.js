var courses = [{
        id: 1,
        name: 'Javascript',
        coin: 1,
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

Array.prototype.filter2 = function(callback){
    var output = [];
    for(var i in this){
        if(this.hasOwnProperty(i)){
            var result = callback(this[i],i);
            if(result){
                output.push(this[i]);
            }
        }
    }
    return output;
}
var result = courses.filter2(function(course,index){
    return course.coin > 0;
});
console.log(result);