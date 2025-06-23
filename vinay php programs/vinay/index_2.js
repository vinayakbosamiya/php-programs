// import fsp from "fs/promises"
// import fs from "fs"
// import path from "path"

// let oldpath = "E:\\vinay bosamiya program\\node.js\\folder 93";
// let files = await fsp.readdir(oldpath)
// // console.log(files)


// // let ext = []
// for (const allitems of files) {
//     // console.log("runnings file...", allitems)
//     // it two methods for these logic you can use logic1 or logic2 
//     let logic1 = allitems.split(".")[1]
//     console.log(logic1)
//     let logic2 = allitems.split(".")[allitems.split(".").length - 1]
//     let logic = allitems.split(".").length > 1 // length > 1  is called it is not folder  jpg
    
//     let ext = logic1
    
//     if (ext != "js" && ext != "json" && logic) {
        
    
//     if(fs.existsSync(path.join(oldpath,ext))) //"E:\\vinay bosamiya program\\node.js\\folder 93\\jpg"
//         {
//         // it is move extension to folder
//         // let oldpath_ext = path.join(oldpath,allitems); //"E:\\vinay bosamiya program\\node.js\\folder 93\\1.jpg"
//         fsp.rename(path.join(oldpath,allitems),path.join(oldpath,ext,allitems))//"E:\\vinay bosamiya program\\node.js\\folder 93\\jpg\\1.jpg" 
//     }
//     else{
//         fsp.mkdir(ext);
//         fsp.rename(path.join(oldpath,allitems),path.join(oldpath,ext,allitems));
//     }
//  }
// }