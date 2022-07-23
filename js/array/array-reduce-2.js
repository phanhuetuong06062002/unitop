var topics = [
     {
         topic: 'Font-end',
         courses: [{
                 id: 1,
                 title: 'HTML,CSS'
             },
             {
                 id: 2,
                 title: 'Javascript'
             }
         ]
     }, 
     {
         topic: 'Back-end',
         courses: [{
                 id: 1,
                 title: 'Php'
             },
             {
                 id: 2,
                 title: 'Nodejs',
             }
         ]
     }
];
var newCourses = topics.reduce(function(initValue,courseValue){
    return initValue.concat(courseValue.courses);
},[]);
var html = newCourses.map(function (course, index) {
        return `
            <div>
                <h2> Khóa : ${course.title}</h2>
                <p> Id : ${course.id} </p>
            </div>
        `;
})
console.log(html.join(""));