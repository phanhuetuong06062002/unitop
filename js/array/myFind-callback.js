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

Array.prototype.find2 = function (callback) {
    var output = [];
    for (var i in this) {
        if (this.hasOwnProperty(i)) {
            var result = callback(this[i], i);
            if (result) {
                output.push(this[i]);
                break;
            }
        }
    }
    return output;
}
var result = courses.find2(function (course, index) {
    return course.coin > 0;
});
console.log(result);