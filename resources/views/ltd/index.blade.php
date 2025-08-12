@extends('layouts.app')
@section('title', 'LTD')
@section('content')
 <main>
        <section class="py-16">
            <div class="w-[90%] md:w-[80%] lg:w-[70%] mx-auto">
                <div class="text-center mb-12">
                  <h1 class="text-3xl md:text-4xl font-bold underline font-['Pixelify_Sans']">
                    Laboratório de Transformação Digital <span class="text-[#1AFEAB] underline">(LTD)</span>
                  </h1>
                </div>
                 <article class="bg-white rounded-xl shadow-lg p-6 md:p-8 flex flex-col lg:flex-row items-center gap-8 transition-shadow duration-300 hover:shadow-xl">
                    <img class="size-60 object-contain mx-auto flex-shrink-0" src="{{asset('assets/img/logos/ltd_logo.png')}}" alt="Logo LTD">
                    <div class="flex flex-col gap-2 text-center lg:text-left">
                        <h2 class="text-2xl font-bold">O que é o LTD?</h2>
                        <p class="text-gray-700 leading-relaxed">
                          O Laboratório de Transformação Digital (LTD) da Estácio é uma iniciativa voltada para a inovação e a digitalização de processos institucionais. Seu principal objetivo é explorar e implementar soluções tecnológicas que otimizem processos e aprimorem a experiência de alunos e professores. O LTD integra os Núcleos Extensionistas da Estácio, proporcionando aos estudantes oportunidades práticas de aplicar conhecimentos para resolver desafios reais e contribuir para o desenvolvimento da sociedade.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <section class="py-8">
          <div class="w-[90%] md:w-[80%] lg:w-[70%] mx-auto">
            <h2 class="text-3xl font-bold text-center pb-8 font-['Pixelify_Sans']">Coordenação</h2>
            <div class="bg-gray-50 rounded-lg p-8 shadow-md grid grid-cols-1 md:grid-cols-3 items-center gap-8">
              <img src="{{asset('assets/img/educadores/arlisonwady.jpg')}}" class="w-48 h-48 md:w-56 md:h-56 rounded-full object-cover shadow-xl mx-auto md:mx-0 col-span-1" />
              <div class="md:col-span-2 text-center md:text-left">
                <h3 class="text-2xl font-bold">Arlison Wady</h3>
                <p class="text-lg text-[#001A35] font-semibold font-['Pixelify_Sans'] mb-4">Professor & Coordenador do LTD</p>
                <p class="text-gray-700 leading-relaxed">
                  Diretor do Laboratório de Tecnologia e Desenvolvimento (LTD) do Centro Universitário Estácio São Luís, onde lidera projetos comunitários e iniciativas acadêmicas voltadas para a inovação e o impacto social. Sua atuação destaca-se pelo desenvolvimento de soluções tecnológicas que conectam o conhecimento universitário às necessidades da comunidade, promovendo inclusão digital e contribuindo para o desenvolvimento regional.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="py-16">
            <div class="w-[90%] md:w-[85%] mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 font-['Pixelify_Sans']">Projetos Desenvolvidos no LTD</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center gap-8">

                <div class="bg-white border border-gray-200 rounded-lg shadow-lg w-full max-w-sm flex flex-col transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6 flex-grow">
                        <h3 class="font-bold text-xl text-center mb-3 h-14 flex items-center justify-center">Aplicativo de Central de Treinamento</h3>
                        <p class="text-gray-600 text-center text-sm">Projeto de aplicativo mobile para gestão de uma academia, otimizando treinos e acompanhamento de alunos.</p>
                    </div>
                    <div class="p-6 pt-0 mt-auto">
                        <button class="w-full bg-[#001A35] text-white p-3 rounded-md shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)] hover:bg-[#002b57] flex items-center justify-center gap-2">
                            <span class="font-semibold">Ver mais</span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                        </button>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-lg w-full max-w-sm flex flex-col transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6 flex-grow">
                        <h3 class="font-bold text-xl text-center mb-3 h-14 flex items-center justify-center">RECOMEX</h3>
                        <p class="text-gray-600 text-center text-sm">Criação de um site de e-commerce focado em produtos e materiais de construção civil.</p>
                    </div>
                    <div class="p-6 pt-0 mt-auto">
                        <button class="w-full bg-[#001A35] text-white p-3 rounded-md shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)] hover:bg-[#002b57] flex items-center justify-center gap-2">
                            <span class="font-semibold">Ver mais</span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                        </button>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-lg w-full max-w-sm flex flex-col transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6 flex-grow">
                        <h3 class="font-bold text-xl text-center mb-3 h-14 flex items-center justify-center">Aplicativo de Alocação de Veículos</h3>
                        <p class="text-gray-600 text-center text-sm">Desenvolvimento de um aplicativo para a gestão completa de uma locadora de veículos.</p>
                    </div>
                    <div class="p-6 pt-0 mt-auto">
                        <button class="w-full bg-[#001A35] text-white p-3 rounded-md shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)] hover:bg-[#002b57] flex items-center justify-center gap-2">
                            <span class="font-semibold">Ver mais</span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                        </button>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-lg w-full max-w-sm flex flex-col transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6 flex-grow">
                        <h3 class="font-bold text-xl text-center mb-3 h-14 flex items-center justify-center">Sistema do Curso de Psicologia</h3>
                        <p class="text-gray-600 text-center text-sm">Criação de um sistema acadêmico para gerenciamento de atividades entre professores e alunos do curso de Psicologia.</p>
                    </div>
                    <div class="p-6 pt-0 mt-auto">
                        <button class="w-full bg-[#001A35] text-white p-3 rounded-md shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)] hover:bg-[#002b57] flex items-center justify-center gap-2">
                            <span class="font-semibold">Ver mais</span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                        </button>
                    </div>
                </div>
                </div>
             </div>
         </section>
    </main>


@endsection
