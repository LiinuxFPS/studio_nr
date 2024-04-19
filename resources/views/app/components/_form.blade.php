<div>
    <form action="{{ route('app.cadastro') }}" method="post">
        @csrf
        <div class="formulario">
            <h3>Dados Pessoais</h3>
            <br>

            Nome completo: <input type="text" name="nome_completo"><br>
            Data de Nascimento: <input type="date" name="data_nascimento"><br>
            Profissão: <input type="text" name="profissao"><br>
            Sexo: <input type="radio" name="sexo" value="F"> F
            <input type="radio" name="sexo" value="M"> M<br>
            Telefone: <input type="tel" name="telefone"><br>
            E-mail: <input type="email" name="email"><br>
        </div>

        <div class="formulario">
            <h3>Responda as perguntas abaixo assinalando um X na opção que se encaixa:</h3>
            <br>

            <label for="extensao_cilios">1- Já fez extensão de cílios?</label><br>
            <input type="radio" id="sim_extensao_cilios" name="extensao_cilios" value="Sim">
            <label for="sim_extensao_cilios">Sim</label><br>
            <label for="onde_extensao_cilios">Onde?</label>
            <input type="text" id="onde_extensao_cilios" name="onde_extensao_cilios"><br>
            <input type="radio" id="nao_extensao_cilios" name="extensao_cilios" value="Não">
            <label for="nao_extensao_cilios">Não</label><br>

            <label for="rimel_maquiagem">2- Está de rímel ou maquiagem?</label><br>
            <input type="radio" id="sim_rimel_maquiagem" name="rimel_maquiagem" value="Sim">
            <label for="sim_rimel_maquiagem">Sim</label><br>
            <input type="radio" id="nao_rimel_maquiagem" name="rimel_maquiagem" value="Não">
            <label for="nao_rimel_maquiagem">Não</label><br>

            <label for="lentes_contato">3- Faz uso de lentes de contato?</label><br>
            <input type="radio" id="sim_lentes_contato" name="lentes_contato" value="Sim">
            <label for="sim_lentes_contato">Sim</label><br>
            <input type="radio" id="nao_lentes_contato" name="lentes_contato" value="Não">
            <label for="nao_lentes_contato">Não</label><br>

            <label for="colirios">4- Faz uso de colírios?</label><br>
            <input type="radio" id="sim_colirios" name="colirios" value="Sim">
            <label for="sim_colirios">Sim</label><br>
            <label for="qual_colirios">Qual?</label>
            <input type="text" id="qual_colirios" name="qual_colirios"><br>
            <input type="radio" id="nao_colirios" name="colirios" value="Não">
            <label for="nao_colirios">Não</label><br>

            <label for="oculos">5- Faz uso de óculos?</label><br>
            <input type="radio" id="sim_oculos" name="oculos" value="Sim">
            <label for="sim_oculos">Sim</label><br>
            <input type="radio" id="nao_oculos" name="oculos" value="Não">
            <label for="nao_oculos">Não</label><br>

            <label for="alergia">6- Possui alguma alergia a cosméticos / loções / esmalte / unhas em gel / látex / superbonder?</label><br>
            <input type="radio" id="sim_alergia" name="alergia" value="Sim">
            <label for="sim_alergia">Sim</label><br>
            <label for="qual_alergia">Qual?</label>
            <input type="text" id="qual_alergia" name="qual_alergia"><br>
            <input type="radio" id="nao_alergia" name="alergia" value="Não">
            <label for="nao_alergia">Não</label><br>

            <label for="disturbios_tireoide">7- Tem distúrbios de tireoide?</label><br>
            <input type="radio" id="sim_disturbios_tireoide" name="disturbios_tireoide" value="Sim">
            <label for="sim_disturbios_tireoide">Sim</label><br>
            <input type="radio" id="nao_disturbios_tireoide" name="disturbios_tireoide" value="Não">
            <label for="nao_disturbios_tireoide">Não</label><br>

            <label for="problema_hormonais">8- Problema hormonais?</label><br>
            <input type="radio" id="sim_problema_hormonais" name="problema_hormonais" value="Sim">
            <label for="sim_problema_hormonais">Sim</label><br>
            <label for="qual_problema_hormonais">Qual?</label>
            <input type="text" id="qual_problema_hormonais" name="qual_problema_hormonais"><br>
            <input type="radio" id="nao_problema_hormonais" name="problema_hormonais" value="Não">
            <label for="nao_problema_hormonais">Não</label><br>

            <label for="suplementos_anabolizantes">9- Faz uso de suplementos ou anabolizantes?</label><br>
            <input type="radio" id="sim_suplementos_anabolizantes" name="suplementos_anabolizantes" value="Sim">
            <label for="sim_suplementos_anabolizantes">Sim</label><br>
            <input type="radio" id="nao_suplementos_anabolizantes" name="suplementos_anabolizantes" value="Não">
            <label for="nao_suplementos_anabolizantes">Não</label><br>

            <label for="exercicios_fisicos">10- Faz exercícios físicos constantemente?</label><br>
            <input type="radio" id="sim_exercicios_fisicos" name="exercicios_fisicos" value="Sim">
            <label for="sim_exercicios_fisicos">Sim</label><br>
            <input type="radio" id="nao_exercicios_fisicos" name="exercicios_fisicos" value="Não">
            <label for="nao_exercicios_fisicos">Não</label><br>
            
            <label for="procedure">11- Realizou algum procedimento na área dos olhos recentemente?</label><br>
            <input type="radio" id="yes" name="procedure" value="Sim">
            <label for="yes">Sim</label><br>
            <input type="radio" id="no" name="procedure" value="Não">
            <label for="no">Não</label><br>
            <label for="procedure_details">Qual?</label><br>
            <input type="text" id="procedure_details" name="procedure_details"><br>

            <label for="eye_problem">12- Tem ou já teve glaucoma, blefarite ou outro problema ocular?</label><br>
            <input type="radio" id="yes" name="eye_problem" value="Sim">
            <label for="yes">Sim</label><br>
            <input type="radio" id="no" name="eye_problem" value="Não">
            <label for="no">Não</label><br>
            <label for="eye_problem_details">Qual?</label><br>
            <input type="text" id="eye_problem_details" name="eye_problem_details"><br>

            <label for="pregnant">13- Está grávida ou lactante?</label><br>
            <input type="radio" id="yes" name="pregnant" value="Sim">
            <label for="yes">Sim</label><br>
            <input type="radio" id="no" name="pregnant" value="Não">
            <label for="no">Não</label><br>

            <label for="oncologic_procedure">14- Está realizando algum procedimento oncológico ou realizou/irá nos próximos meses?</label><br>
            <input type="radio" id="yes" name="oncologic_procedure" value="Sim">
            <label for="yes">Sim</label><br>
            <input type="radio" id="no" name="oncologic_procedure" value="Não">
            <label for="no">Não</label><br>

            <label for="sleep_side">15- De que lado você costuma dormir?</label><br>
            <input type="radio" id="right" name="sleep_side" value="right">
            <label for="right">Direito</label><br>
            <input type="radio" id="left" name="sleep_side" value="left">
            <label for="left">Esquerdo</label><br>
            <input type="radio" id="dont_know" name="sleep_side" value="dont_know">
            <label for="dont_know">Não sei</label><br>

            <label for="rhinitis_sinusitis">16- Tem rinite ou sinusite frequentemente?</label><br>
            <input type="radio" id="yes" name="rhinitis_sinusitis" value="Sim">
            <label for="yes">Sim</label><br>
            <input type="radio" id="no" name="rhinitis_sinusitis" value="Não">
            <label for="no">Não</label><br>

            <label for="oily_skin">17- Tem Pele oleosa?</label><br>
            <input type="radio" id="yes" name="oily_skin" value="Sim">
            <label for="yes">Sim</label><br>
            <input type="radio" id="no" name="oily_skin" value="Não">
            <label for="no">Não</label><br>

            <label for="observations">Se houver alguma observação ou problema que julgue relevante informar antes de realizar o procedimento, descreva-o abaixo:</label><br>
            <textarea id="observations" name="observations"></textarea><br>
        </div>

        <button type="submit">ENVIAR</button>
    </form>
</div>