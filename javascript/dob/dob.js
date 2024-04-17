const moment = require("moment");
/**
 * Date of birth (dob)
 */
var now = moment().format('MMM DD h:mm A');
console.log(now);
var under18 = moment().subtract("17", "years").unix();
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
