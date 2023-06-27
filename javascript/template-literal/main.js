/**
 * @param {string} str
 * @param {object} src
 */
const validateParams = (str, src) => {
  if (typeof str !== "string")
    throw new Error("str must be of type string: received", str);

  if (false === (typeof src === "object" && typeof src !== null))
    throw new Error("source must be of type object: received", src);
  else if (!Object.keys(src).length)
    throw new Error(
      "source object must contact at least one key: received",
      src
    );
};

/**
 *
 * @param {string} str
 * @param {object} source
 * @return string|number
 */
const getTemplateValue = (str, source) => {
  let result = -1;

  try {
    const tmp = str.split(".");
    const v = source[tmp[0]][tmp.pop()];
    if (v !== undefined) {
      result = v;
    }
  } catch (e) {}

  return result;
};

/**
 *
 * @param {string} str
 * @return *
 */
const getTemplate = str => {
  let result = "";
  str.split("").forEach(c => {
    if (["{", "}", " "].includes(c)) return;
    result += c;
  });

  return result;
};

/**
 *
 * @param {string} str template string to part
 * @param {object} source key value pairs for template insertion
 * @return string
 */
const templateLiteral = (str, source) => {
  validateParams(str, source);
  let result = str;
  const rgx = new RegExp(/\{{2}\s+?\w+\.\w+\s+\}{2}/g);
  const matches = {};
  let trialStr;
  while ((trialStr = rgx.exec(str))) {
    const template = getTemplate(trialStr[0]);
    const val = getTemplateValue(template, source);
    if (-1 === val) throw new Error(`${trialStr[0]} does not exist in source`);
    matches[trialStr[0]] = val;
  }
  for (const key in matches) {
    result = result.replace(key, matches[key]);
  }
  return result;
};

module.exports = {
  templateLiteral
};
