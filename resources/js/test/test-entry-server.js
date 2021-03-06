import app from './test-app';
import router from './test-router';

new Promise((resolve, reject) => {
  router.push(url);
  router.onReady(() => {
    const matchedComponents = router.getMatchedComponents();
    if (!matchedComponents.length) {
      return reject({ code: 404 });
    }
    resolve(app);
  }, reject);
})
.then(app => {
    renderVueComponentToString(app, (err, res) => {
      print(res);
    });
})
.catch((err) => {
    print( new Error(err.code) );
});

