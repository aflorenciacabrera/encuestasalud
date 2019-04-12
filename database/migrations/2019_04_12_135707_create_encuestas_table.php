<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Instrumento de recolección de datos
            $table->string('fecha_realizacion');
            $table->string('coordinador');
            $table->string('encuestador');
            //PARTE 1: IDENTIFICACIÓN DE LA ESCUELA
            $table->string('localidad');
            $table->string('establecimiento');
            $table->string('rama');
            $table->string('nomynum_establecimiento');
            $table->string('cargo_informante');
            $table->string('tipo_jornada');
            $table->integer('matricula_cantitad');
            $table->string('obtencion_dato');
            $table->integer('num_docente_nodocente');
            $table->string('ctrl_sanitario');
            $table->boolean('persona_fumando');
            $table->string('lugar_fumador');
            //SECCIÓN A:VENTAS DE ALIMENTOS Y BEBIDAS AL INTERIOR DE LA ESCUELA
            $table->boolean('punto_comercializacion');
            $table->boolean('categoria_comercializacion');
            $table->string('lista_productos');
            $table->string('compra_may_men');
            $table->string('capacitacion_comercio');
            $table->string('capacitacion_inmediacion');
            //SECCIÓN B: COMEDORES, CANTINAS Y BUFETES SALUDABLES – CRITERIOS NUTRICIONALES
            $table->string('prestacion_servicio_escolar');
            $table->string('foto_plato');
            $table->string('tipo_comida_estructurada');
            $table->string('compra_insumo');
            $table->boolean('salon_comedor');
            $table->string('foto_comedor');
            $table->string('lugar_desayuno_merienda');
            $table->string('lugar_admuerzo');
            $table->boolean('silla_mesa');
            $table->boolean('utensilios');
            $table->string('observaciones');
            $table->string('supervicion_menu');
            $table->string('recomendaciones_GAPA');
            $table->string('recomendaciones_macro_micronutrientes');
            $table->boolean('menu_vista');
            $table->string('foto_menu');
            $table->string('lugar_preparacion_comida');
            $table->string('menu_especial');
            $table->string('alimento_tradicional');
            $table->string('alimento_tradicional_frecuencia');
            $table->boolean('informe_menu');
            $table->string('bebidas');
            $table->boolean('huerta');
            $table->boolean('sal_libre');
            $table->string('sal_presentacion');
            $table->string('habitos_comida');
            //SECCIÓN C: COCINEROS/AS Y AYUDANTES DE COCINA
            $table->string('encargado_alimento');
            $table->boolean('ayudantes');
            $table->string('ayudantes_capacitados');
            //SECCIÓN D: ACCESO AL AGUA SEGURA
            $table->boolean('agua_corriente');//si entra por el NO
            $table->string('agua_presentacion');
            $table->string('agua_segura');
            $table->string('agua_segura_utilizacion');
            $table->string('procedimiento_limpieza_almacen');
            $table->string('bebedero');
            $table->string('foto_bebedero');
            $table->string('lugar_bebedero');
            //SECCIÓN E: COMENSALIDAD Y HÁBITOS
            $table->string('duracion_tipo_prestacion');
            $table->string('acompanan_nino');
            $table->boolean('nino_lavan');
            $table->boolean('nino_cepillan');
            $table->string('pantallas_vista');
            //SECCIÓN F: PROMOCION DE LA SALUD - EDUCACIÓN ALIMENTARIA Y NUTRICIONAL (EAN)
            $table->string('promo_salud');
            $table->string('tematicas');
            $table->string('clase_estracurricular');
            $table->boolean('programas_EAN');
            $table->string('materia_especifica_existente');
            //SECCIÓN G: EXPOSICIÓN A PUBLICIDAD DE ALIMENTOS Y BEBIDAS
            $table->boolean('publicidad_alimento');
            $table->string('lugar_publico');
            $table->string('incentivo_consumo');
            //SECCIÓN H: LACTANCIA
            $table->boolean('alumna_embarazada');
            $table->boolean('espacio_lactancia');
            $table->string('promueven_espacio_lactiancia');
            //SECCIÓN I: ACTIVIDAD FÍSICA 	
            $table->string('educacion_fisica');
            $table->string('profe_titulo');
            $table->string('evaluacion_aptitud');
            $table->string('apto_medico');//si responde SI
                $table->string('exigencias');
                $table->string('norma_juridiccional');
                $table->string('exigencia_niveles');
                $table->string('cant_alumnos');
                 $table->string('porcentaje_total_alumnos');
            $table->string('espacio_activ_fisica');//si opta por SI
                $table->string('movimiento_espontaneo');
            $table->string('actividad_extracurricular');
            $table->string('propuestas_sociocultural');
            $table->boolean('vestimenta');
            $table->boolean('clase_mix');
            $table->string('enfoque_inclusivo');
            $table->string('accesos');
            $table->string('transporte_activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}
