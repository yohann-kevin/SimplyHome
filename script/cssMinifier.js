let fs = require('fs');
let uglifycss = require('uglifycss');

let minifiedFonts = uglifycss.processFiles(
    [ "fonts/stylesheet.css"],
    { maxLineLen: 500 }
);

let minifiedMain = uglifycss.processFiles(
    [ "style/main.css"],
    { maxLineLen: 500 }
);

fs.unlinkSync("fonts/stylesheet.css");
fs.unlinkSync("style/main.css");

fs.writeFile("fonts/stylesheet.css", minifiedFonts, function(err) {
    if(err) {
        console.log("Error : " + err);
    } else {
        console.log("This files is minified ! ");
    }
})

fs.writeFile("style/main.css", minifiedMain, function(err) {
    if(err) {
        console.log("Error : " + err);
    } else {
        console.log("This files is minified ! ");
    }
})