
<footer class=" w-full mx-auto bg-[#001A35] text-white pt-10 pr-5 pb-10 pl-5 text-sm font-['Pixelify_Sans']">
	<div class="w-[75%] flex max-sm:block max-lg:block flex-wrap justify-between gap-[30px] mx-auto">
		<section class="flex-1 basis-[200px] max-lg:py-5">
			<h3 class="text-lg text-white max-lg:text-center max-lg:text-xl">Créditos</h4>
			<p class="max-lg:text-base max-lg:text-center">Site desenvolvido por alunos da Estácio São Luís</p>
		</section>
		<section class="flex-1 basis-[200px] max-lg:py-5">
			<h3 class="text-lg text-white max-lg:text-center max-lg:text-xl">Sobre o Curso</h4>
			<p class="max-lg:text-base max-lg:text-center">Ciência da Computação - Universidade Estácio de Sá</p>
			<p class="max-lg:text-base max-lg:text-center">Campus São Luís</p>
		</section>
		<section class="flex-1 basis-[200px] max-lg:py-5">
			<h3 class="text-lg text-white max-lg:text-center max-lg:text-xl">Contato</h4>
			<address>
				<p class="max-lg:text-base hover:underline hover:text-base duration-300 max-lg:text-center">
					<a href="#">Instagram da Atlética</a>
				</p>
				<p class="max-lg:text-base hover:underline hover:text-base duration-300 max-lg:text-center">
					<a href="#">Instagram da Computação Estácio Sao Luis</a>
				</p>
			</address>
		</section>
	</div>
	<div class="text-center mt-5  border-[#444] pt-7">
		<p class="text- italic">©
			{{ now()->format('Y') }} {{ config('app.name') }} 🦆
			- Todos os direitos reservados.</p>
	</div>
</footer>
