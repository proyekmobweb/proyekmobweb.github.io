navigator.serviceWorker.register('sw.js')

var deferredPrompt;
window.addEventListener('beforeinstallprompt', function(event) {
  console.log('beforeinstallprompt fired');
  event.preventDefault();
  deferredPrompt = event;
  return false;
});

// if ('serviceWorker' in navigator) {
//     window.addEventListener('load', function() {
//         navigator.serviceWorker.register('https://opensource.petra.ac.id/~m26416041/movie/sw.js').then(function(registration) {
//           console.log('ServiceWorker registration successful with scope: ', registration.scope);
//       }, function(err) {
//           console.log('ServiceWorker registration failed: ', err);
//           });
//       });
// }