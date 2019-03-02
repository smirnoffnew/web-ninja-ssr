import app from './admin-app';
import router from './admin-router';

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

