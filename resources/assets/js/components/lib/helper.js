export default {
    number_format(n, c, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c, 
            d = d == undefined ? "." : d, 
            t = t == undefined ? "," : t, 
            s = n < 0 ? "-" : "", 
            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
            j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    },

    CheckTaiwanID( userid ) { //身份證檢查函式
        var reg=/^[A-Z]{1}[1-2]{1}[0-9]{8}$/;  //身份證的正規表示式
        if( reg.test( userid ) ) {
            var s = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  //把A取代成10,把B取代成11...的作法
            var ct = ["10","11","12","13","14","15","16","17","34","18","19","20","21",
                           "22","35","23","24","25","26","27","28","29","32","30","31","33"];
        var i = s.indexOf(userid.charAt(0));
        var tempuserid = ct[i] + userid.substr(1, 9); //若此身份證號若是A123456789=>10123456789
        var num = tempuserid.charAt(0)*1;
        for( i=1 ; i<=9 ; i++ ) {
           num = num + tempuserid.charAt(i)*(10-i);
        }
        num += tempuserid.charAt(10)*1;
     
            if( (num%10)==0 ) {
               return true;
            }
            else {
               return false;
            }
         }
         else {
            return false;
        }
    },

    getAstro(m, d) {
		return "魔羯水瓶雙魚牡羊金牛雙子巨蟹獅子處女天秤天蠍射手魔羯".substr(m*2-(d<"102223444433".charAt(m-1)- -19)*2,2);
    },
    
    FormatNumberLength(num, length) {
        var r = "" + num;
        while (r.length < length) {
            r = "0" + r;
        }
        return r;
    }
}