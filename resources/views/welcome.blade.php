<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Email Notifications </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-200">

    <div class="mx-auto max-w-screen-xl px-4 py-16 my-6">
        <div class="grid grid-cols lg:grid-cols-3 gap-2 mb-6">
            <div class="col-span-2 bg-white p-4 shadow rounded-md">
                <form action="{{url('send-mail')}}" method="post">
                    @csrf
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="email">Mail To</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            id="email" placeholder="name@flowbite.com" type="email" name="mail_to" />
                        @error('mail_to')<small class="text-red-600 font-medium">{{$message}}</small>@enderror
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="subject">Subject</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            id="subject" placeholder="Subject..." type="text" name="subject" />
                        @error('subject')<small class="text-red-600 font-medium">{{$message}}</small>@enderror
                    </div>
                    <div class="mb-5">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                        <textarea
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            id="message" rows="4" placeholder="Leave a message..." name="message"></textarea>
                        @error('message')<small class="text-red-600 font-medium">{{$message}}</small>@enderror
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Send Message
                    </button>
                </form>
            </div>
          

   
</body>

</html>