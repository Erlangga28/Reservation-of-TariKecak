<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>
<body>
<div class="flex justify-center bg-orange-700">
            <nav class="self-center w-full max-w-7xl  ">
                <div class="flex flex-col lg:flex-row justify-around items-center text-white">
                    <h1 class="uppercase pl-5 py-4 text-lg font-sans font-bold">Kecak</h1>
                    <ul class="hidden lg:flex items-center text-[18px] font-semibold pl-32">
                        <li class="hover:underline  underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5">
                            <a href="home.php">Home</a>
                        </li>
                        <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5">
                            <a href="buyticket.php">Ticket</a>
                        </li>
                        <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5">
                            <a href="find.php">Find ticket</a>
                        </li>
                        <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5">
                            <a href="store.php">Store</a></li>
                        </ul>
                <div class="text-white text-center text-base pr-5  inline-flex"> 
                    <a href="#" class="w-8 h-8 inline-block rounded-full pt-[5px] hover:text-blue-500">
                        <i class="fa fa-google"></i>
                    </a> 
                    
                </div>
                </div>
            </nav>
    </div>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
      <img src="img/hat-sunglasses.jpg"class="w-32 h-30"> 
      <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24"> -->
          <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
        
      </div>
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Bring a hat and sunglasses</h2>
        <p class="leading-relaxed text-base">You can wear glasses and a hat to the show if you have them. This is because some seats will face right into the setting sun, which will be very bright, especially between 3 and 5 in the afternoon. 
                                            Your face and eyes will be protected from the hot afternoon sun by a hat and sunglasses.</p>
      </div>
    </div>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Keep monkeys away from your bags and glasses</h2>
        <p class="leading-relaxed text-base">The area around the temple is also home to a lot of monkeys. Based on what has been seen, the monkeys are usually more active at night, when the audience is leaving.
                                              Sometimes the monkeys like to be bad and steal small things from people, like glasses, water bottles, cell phones, and other small things. So, pay attention and take care of the things you own. Hold on tight to the stem of your glasses and stay alert, especially at night, if you wear them.
                                              Even so, there’s no need to worry because there will be a lot of handlers to make sure people get to the exit safely.</p>
      </div>
      <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
      <img src="img/monkey-away.webp"class="w-32 h-30"> 
        <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
          <circle cx="6" cy="6" r="3"></circle>
          <circle cx="6" cy="18" r="3"></circle> -->
          <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
        </svg>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- component -->
<form action="data/ticket.data.php"method="post">
  <section class="max-w-full p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-center text-xl font-bold text-white capitalize dark:text-white">Ticket Kecak Dance Form</h1>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="name">Name</label>
                <input name="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="email">Email Address</label>
                <input name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="date">Date</label>
                <input name="date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="ticket">Ticket</label>
                <select name= "ticket"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="notes">Notes</label>
                <textarea name="notes" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>   
        </div>

        <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class=" text-white form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      
    </div>
  </div>
      </div>
    </div> 
  </div> 
</div>
<div class="flex justify-end mt-6">
            <a type="submit" name= "submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600" href="confirm-email.php">Buy</a>
        </div>
    </form>
</section>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="img/tarikecak-uluwatu.jpg">
    <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Tari Kecak Show in Uluwatu</h1>
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
          <label class="text-white dark:text-gray-200" for="email">Email Address</label>
          <input name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
      <div class="flex justify-end mt-6">
        <button type="submit" name= "search" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Search</button>
      </div>
    </div>
</div>
</div>
</section>

<!-- <form action="data/ticket.data.php"method="post">
  <section class="max-w-full p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-center text-xl font-bold text-white capitalize dark:text-white">Find Reservation</h1>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

            <div>
                <label class="text-white dark:text-gray-200" for="email">Email Address</label>
                <input name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="flex justify-end mt-6">
            <button type="submit" name= "search" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Search</button>
        </div>
      </div>
    </section>
</form> -->

<div id="disqus_thread"></div>
<script>
    
    (function() { 
    var d = document, s = d.createElement('script');
    s.src = 'https://itsnews.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="img/Tarikecak-logo.png" class="w-25 h-20 text-white p-2"></img>
      <!-- <svg src="Tarikecak-logo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg> -->
      <span class="ml-3 text-xl">Kecak 2022</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">Kecak 2022 —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>