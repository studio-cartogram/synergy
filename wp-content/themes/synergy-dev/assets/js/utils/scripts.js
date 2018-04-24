const getScript = url => {
  return new Promise(function(resolve, reject) {
    const scriptTag = document.createElement('script');

    scriptTag.onload = function() {
      resolve(url);
    };
    scriptTag.onerror = function() {
      reject(url);
    };

    scriptTag.src = url
    document.getElementsByTagName('head')[0].appendChild(scriptTag)
  })
}

export const sortScripts = scripts => {
  const externalScripts = Array.prototype.map.call(scripts, script => script.getAttribute('src') && getScript(script.getAttribute('src')))
  const inlineScripts = Array.prototype.map.call(scripts, script => !script.getAttribute('src') && script)

  return {
    inlineScripts,
    externalScripts,
  }
}