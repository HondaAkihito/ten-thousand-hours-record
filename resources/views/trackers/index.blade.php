<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          1万時間記録
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                {{-- 一覧表示 --}}
                <div class="overflow-x-auto lg:w-2/3 w-full mx-auto overflow-auto">
                  <table class="whitespace-nowrap table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                      <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">進捗率</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">残り学習時間</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">目標達成まで<br>(1日8時間計算)</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">記録回数</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $trackers->progress_percentage }}</td>
                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $trackers->hours }}時間{{ $trackers->minutes }}分</td>
                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $trackers->years }}年{{ $trackers->months }}ヶ月{{ $trackers->days }}日</td>
                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $trackers->count }}回</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
  </div>

</x-app-layout>