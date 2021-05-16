(function (window) {
  var names = ["Sampath", "John", "Jaggesh", "Jacob", "Kumar", "Pooja", "Lalith", "Ruban", "Laasya", "Jagan"];
  for (var i in names) {
    var firstLetter = names[i].charAt(0).toLowerCase();
    if (firstLetter === 'j') {
      byeSpeaker.speak(names[i]);
    } else {
      helloSpeaker.speak(names[i]);
    }
  }
})(window);

