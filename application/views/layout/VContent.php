
<div class="">
    <div class="flex-grow container mx-auto p-8">
        <div class="p-8 rounded shadow-md w-96 mx-auto bg-blue-100">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Gửi Tin Nhắn SMS</h2>

            <form action="" method="post" class="space-y-4">
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                    <input type="text" id="phone" name="phone" 
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Nội dung tin nhắn</label>
                    <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                </div>

                <div>
                    <label for="provider" class="block text-sm font-medium text-gray-700">Dịch vụ</label>

                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Gửi Tin Nhắn
                </button>
            </form>
        </div>
    </div>
</div>