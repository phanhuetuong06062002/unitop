var courses = [
    { 
        id : 1,
        name : 'Javascript',
        coin : 1,
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
//forEach,every,some,filter,find,map,reduce.

// var isFree = courses.some(function(course,index){
//     console.log(course);
//     return course.coin === 0 ;
// });
// console.log(isFree);
var newCouses = courses.map(function(course,index){
    // return {
    //     id : course.id,
    //     name : `Khóa học :${course.name}`,
    //     coin : course.coin,
    //     coinText : `${course.coin} Coin`,
    // }
    return `<h2>${course.name}</h2>`;
});
console.log(newCouses.join(""));