const moment = require("moment");
/**
 * Date of birth (dob)
 */
const now = moment().format('MMM DD h:mm A');
console.log(now);
const under18 = moment().subtract("17", "years").unix();
console.log("under 18 :", under18);
const over18 = moment().subtract("19", "years").unix();
console.log("over 18 :", over18);
console.log(under18 === over18);

console.log(
	moment(under18 * 1000).format('YYYY MMM DD h:mm A')
);
console.log(
	moment(over18 * 1000).format('YYYY MMM DD h:mm A')
);

/*
Apr 17 11:58 AM
under 18 : 1176807539
over 18 : 1113735539
false
2007 Apr 17 11:58 AM
2005 Apr 17 11:58 AM
*/