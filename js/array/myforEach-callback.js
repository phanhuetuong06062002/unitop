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
Array.prototype.map2 = function(callback) {
    for(var i in this){
        if(this.hasOwnProperty(i)){
            callback(this[i],i,this)
        }
    }
};

var result = courses.map2(function(course,index,arr){
    console.log(course,index);
});