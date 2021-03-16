let fs = require('fs');
let uglifycss = require('uglifycss');

let uglified = uglifycss.processFiles(
    [ "style/main.css"],
    { maxLineLen: 500 }
);

fs.unlinkSync("style/main.css");

fs.writeFile("style/main.css", uglified, function(err) {
    if(err) {
        console.log(err);
    } else {
        console.log("GG");
    }
})

console.log(fs);
console.log(uglified);