<div class="body">
    <h1 align="center"><i class="fa fa-user"></i><?= $aAlumno['vcpernombre']?></h1>
    
    <p><strong>Escuela: </strong><?= $aAlumno['vcescnombre']?></p>
    <p><strong>Grado: </strong><?= $aAlumno['vcescgradnombre']?></p>
    <p><strong>DNI: </strong><?= $aAlumno['inperdni']?></p>
    <p><strong>Fecha y hora de realización: </strong><?= $aInforme['dtinffecha']?></p>
    <p><strong>Fecha de nacimiento: </strong><?= $aAlumno['dtperfechnac']?></p>
    <p><strong>Edad: </strong><?= $aAlumno['dtedad']?></p>
    <p><strong>Entrevistado: </strong><?= $aTutor['vcpernombre']?></p>
    <p><strong>Vínculo: </strong><?= $aTutor['vcparentnombre']?></p>
    <p><strong>Tel.: </strong><?= $aAlumno['vcpertelcodarea']?> - <?= $aAlumno['vcpertel']?></p>
    <p><strong>Cel.: </strong><?= $aAlumno['vcpercelcodarea']?> - <?= $aAlumno['vcpercel']?></p>

    <h2>Instrumentos:</h2>
    <ul>
        <li>Entrevistas y encuestas on-line a familiares y/o docentes.</li>
        <li>Recopilación de observaciones del entrevistado en el contexto familiar y/o áulico.</li>
        <li>Análisis comparativo de las respuestas ingresadas con tablas del desarrollo infantil esperable para la edad.</li>
    </ul>
    <h2>Se exploran:</h2>
    <ul>
        <li>Habilidades psicomotoras.</li>
        <li>Habilidades cognitivas.</li>
        <li>Habilidades socio-emocionales.</li>
    </ul>
    <p>El Programa de Potenciamiento Infantil Personalizado, es de carácter preventivo, orientativo y no diagnóstico</p>
    <p>El ritmo de crecimiento y desarrollo es único en cada persona.</p>
    <p>Las habilidades estandarizadas, pueden lograrse al final del tramo de edad.</p>
    <p>En algunos casos se sugiere consultar al pediatra y/o profesional que corresponda.</p>
    
    <?php foreach($aResultados as $aElemResultado): ?>
        <?php //var_dump($aElemResultado); die;?>
        <h3><?= $aElemResultado['titulo']; ?></h3>
        <?php if (isset($aElemResultado['resultado'])):?>
            <?php $aAux = $aElemResultado['resultado']; ?>
            <h4>INFORMACION OBTENIDA</h4>
            <ul>
            <?php foreach($aAux as $aElemAux): ?>
                <li><?= isset($aElemAux[0]['vcresultinfobt'])? $aElemAux[0]['vcresultinfobt']: ''; ?></li>
            <?php endforeach; ?>
            </ul>
            <h4>SUGERENCIAS PROFESIONALES PERSONALIZADAS</h4>
            <?php foreach($aAux as $aElemAux): ?>
                <?= isset($aElemAux[0]['vcresultsugprof'])? $aElemAux[0]['vcresultsugprof']: ''; ?>
            <?php endforeach; ?>
            <h4>EJERCICIOS DE POTENCIAMIENTO</h4>
            <?php foreach($aAux as $aElemAux): ?>
                <?= isset($aElemAux[0]['vcresultejepot'])? sprintf($aElemAux[0]['vcresultejepot']) : ''; ?>
            <?php endforeach; ?>           
            
        <?php endif; ?>
    <?php endforeach; ?>
    <h2>Representación grafica de la información obtenida <h2>
    <?php foreach($aDataImagen as $aElemImagen): ?>
        <img src="<?= $aElemImagen['vcrgpath'].$aElemImagen['vcrgnombre']; ?>" width="650" height="400" />    
        <br />
    <?php endforeach; ?>     
</div>