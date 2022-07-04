export default {
   async getBacteria(tact) {
      var requestOptions = {
         method: 'GET',
      };

      return await (await fetch(`http://xbackend?tact=${tact}`, requestOptions)).json()
   }
};