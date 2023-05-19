@extends('templates.default2')
<?php 
    $arr = array('title' => 'Test');
?>
@section('section')
    <x-navigation :arr="$arr" />
    <x-messages />
    <header class="max-w-lg mx-auto mt-5">
        <a href="">
            <h1 class="text-4xl text-black text-center">Student List</h1>
        </a>
    </header>

    <section class="mt10">
        <div class="overflow--auto relative">
            <table class="w-96 mx-auto text-sm text-left text-black-500">
                <thead class="text-xs text-black uppercase bg-blue-300">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Username
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Password
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Score
                        </th>
                        <th scope="col" class="py-3 px-6">
                            
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $num = 1; ?>
                    @foreach ($data as $student)
                        <tr class="bg-blue-200 border-b">
                            <td class="py-3 px-6">
                                <?php echo($num) ?>
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> username}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> password}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> user}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> score}}
                            </td>
                            <td class="py-3 px-6">
                                <a href="/student/{{$student->id}}" class="bg-blue-600 text-white px-4 py-1">View</a>
                            </td>
                        </tr>
                        <?php $num = $num + 1; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- <p style="background-image: url('image/buksu.jpg');"> --}}
    <br>
    <header class="max-w-lg mx-auto mt-5">
        <a href="">
            <h1 class="text-4xl text-black text-center">Question List</h1>
        </a>
    </header>
    <section class="mt10">
        <div class="overflow--auto relative">
            <table class="w-96 mx-auto text-sm text-left text-black-500">
                <thead class="text-xs text-black uppercase bg-blue-300">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Question
                        </th>
                        <th scope="col" class="py-3 px-6">
                            a
                        </th>
                        <th scope="col" class="py-3 px-6">
                            b
                        </th>
                        <th scope="col" class="py-3 px-6">
                            c
                        </th>
                        <th scope="col" class="py-3 px-6">
                            d
                        </th>
                        <th scope="col" class="py-3 px-6">
                            answer
                        </th>
                        <th scope="col" class="py-3 px-6">
                            
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($data2 as $student)
                        <tr class="bg-blue-200 border-b">
                            <td class="py-3 px-6">
                            <?php
                                echo($i);
                            ?>
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> question}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> a}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> b}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> c}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> d}}
                            </td>
                            <td class="py-3 px-6">
                                {{$student -> answer}}
                            </td>
                            <td class="py-3 px-6">
                                <a href="/question/{{$student->id}}" class="bg-blue-600 text-white px-4 py-1">View</a>
                            </td>
                        </tr>
                        <?php $i = $i + 1; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

{{-- @foreach ($data as $student)
<li>{{$student -> first_name}}</li>
@endforeach --}}