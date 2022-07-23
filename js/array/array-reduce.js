var courses = [{
        id: 1,
        name: 'Javascript',
        coin: 5,
    },
    {
        id: 2,
        name: 'HTML,css',
        coin: 15,
    },
    {
        id: 1,
        name: 'PHP',
        coin: 20,
    },
    {
        id: 1,
        name: 'NodeJs',
        coin: 30,
    },
];
var i = 0;

// function courseHandler(accumulator, course) {
//     var total = accumulator + course.coin;
//     i++;
//     console.table({
//         'Lượt chạy' : i,
//         'Biến tích trữ' : accumulator,
//         'Giá khóa học' : course.coin,
//         'Tích trữ được' : total,
//     });
//     return total;
// }
// var Total = courses.reduce(courseHandler, 0);
// console.log(Total);
var depthArray = [1, 2, [3, 4], 5, [6, 7], 8, 9];
var flatArray = depthArray.reduce(function (accumulator, currentValue) {
    return accumulator.concat(currentValue);
}, []);
console.log(flatArray);

var numbers = [1, 2, 3, 4, 5, 6, 7];
var totalNumber = numbers.reduce(function (accumulator, currentValue) {
    return accumulator + currentValue;
});
console.log(totalNumber);

console.log("==========");
