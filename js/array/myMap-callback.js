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
Array.prototype.map2 = function(callback){
    var output = [];
    var arrayLenght = this.length;
    for (var i = 0; i < arrayLenght; i++){
        var result = callback(this[i],i);
        output.push(result);
    };
    return output;
}


var htmls = courses.map2(function(course,index){
    return `<h2>${course.name}</h2>`;
});
console.log(htmls.join(""));