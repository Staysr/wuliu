(function(a,b){a.parseTpl=function(f,e){var c="var __p=[];with(obj||{}){__p.push('"+f.replace(/\\/g,"\\\\").replace(/'/g,"\\'").replace(/<%=([\s\S]+?)%>/g,function(g,h){return"',"+h.replace(/\\'/,"'")+",'"}).replace(/<%([\s\S]+?)%>/g,function(g,h){return"');"+h.replace(/\\'/,"'").replace(/[\r\n\t]/g," ")+"__p.push('"}).replace(/\r/g,"\\r").replace(/\n/g,"\\n").replace(/\t/g,"\\t")+'\');}return __p.join("");',d=new Function("obj",c);return e?d(e):d}})(Zepto);