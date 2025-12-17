@extends('layouts.app')

@section('title', 'Marshall Grady – Portfolio')

@section('content')
<section class="space-y-6">

    <h1 class="text-3xl font-bold">Hi, I’m Marshall</h1>

    <p>
        I’m a data engineer / programmer analyst supporting Enterprise Research Administration (ERA)
        at NC State University.
    </p>

    <p>
        My work primarily involves building and maintaining nightly data pipelines that load and
        transform data between PeopleSoft, InfoEd, Oracle, and SQL Server. I write PHP scripts that
        populate InfoEd SQL Server staging tables, create and refresh denormalized reporting tables,
        and enforce business rules around data integrity, deduplication, and key relationships.
    </p>

    <p>
        In parallel, I use SAS Data Integration Studio to support and validate similar ETL processes,
        ensuring consistency between systems and identifying performance or data quality issues.
    </p>

    <p>
        I also build internal web tools to surface this data to users—ranging from Laravel-based
        applications to lightweight HTML and JavaScript utilities—and I manage the RED Resource Hub,
        which provides centralized documentation and tools for ERA users.
    </p>

    <p>
        Currently in my role, I work extensively with the Faculty Excellence Portal (FEP), which gives
        me exposure to faculty-facing systems, review workflows, and the importance of accurate,
        well-presented data in institutional applications.
    </p>

    <p class="text-gray-700">
        This site is a portfolio of tools, scripts, and projects I’ve built.
    </p>

</section>

<hr class="my-10">

<section class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <a href="{{ route('php.projects') }}"
       class="block border border-gray-300 rounded-lg p-6 hover:border-gray-500 transition">
        <h2 class="text-xl font-semibold mb-2">PHP Projects</h2>
        <p class="text-gray-700">
            Nightly loaders, staging table pipelines, denormalized table generation,
            and optimization strategies using PHP.
        </p>
    </a>

    <a href="{{ route('sql.projects') }}"
       class="block border border-gray-300 rounded-lg p-6 hover:border-gray-500 transition">
        <h2 class="text-xl font-semibold mb-2">SQL Projects</h2>
        <p class="text-gray-700">
            Denormalization logic, reporting views, performance tuning,
            and cross-system SQL transformations.
        </p>
    </a>

    <a href="{{ route('web.projects') }}"
       class="block border border-gray-300 rounded-lg p-6 hover:border-gray-500 transition">
        <h2 class="text-xl font-semibold mb-2">Web Application Projects</h2>
        <p class="text-gray-700">
            Internal web tools, dashboards, and resource hubs built with Laravel,
            HTML, and JavaScript.
        </p>
    </a>

    <a href="{{ route('interview.questions') }}"
       class="block border border-gray-300 rounded-lg p-6 hover:border-gray-500 transition">
        <h2 class="text-xl font-semibold mb-2">Interview Questions</h2>
        <p class="text-gray-700">
            Common technical and behavioral interview questions with answers
            based on real project experience.
        </p>
    </a>

</section>


@endsection
