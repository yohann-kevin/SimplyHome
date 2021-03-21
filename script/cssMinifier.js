let fs = require('fs');
let uglifycss = require('uglifycss');

let minifiedMain = uglifycss.processFiles(
    [ "style/main.css"],
    { maxLineLen: 500 }
);

fs.unlinkSync("style/main.css");

fs.writeFile("style/main.css", minifiedMain, function(err) {
    if(err) {
        console.log("Error : " + err);
    } else {
        console.log("This files is minified ! ");
    }
})