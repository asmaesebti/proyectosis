/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package excel;

import java.util.ArrayList;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.ArrayList;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

/**
 *
 * @author daw2
 */
public class EscribirExcel {

    public static void crearAPartirDeArrayList() {

        ArrayList<Persona> personas = new ArrayList<>();

        Persona p = new Persona("a", "b", 0);
        Persona p1 = new Persona("Luis", "https://parzibyte.me", 50);
        Persona p2 = new Persona("Rasmus Lerdorf", "https://toys.lerdorf.com/", 53);
        Persona p3 = new Persona("Brian Kernighan", "https://www.cs.princeton.edu/~bwk/", 80);
        personas.add(p1);

        personas.add(p2);

        personas.add(p3);

        Workbook libro = new XSSFWorkbook();
        final String nombreArchivo = "Personas.xlsx";
//        Sheet hoja = libro.createSheet("Hoja 2");
        Sheet hoja = null;
        String[] encabezados = {"Nombre", "Web", "Edad"};
        int indiceFila = 0;

        for (int k = 0; k < encabezados.length; k++) {
            hoja = libro.createSheet("Hoja " + k);

            Row fila = hoja.createRow(indiceFila);
            for (int i = 0; i < encabezados.length; i++) {
                String encabezado = encabezados[i];
                Cell celda = fila.createCell(i);
                celda.setCellValue(encabezado);
            }

            indiceFila++;

            for (int j = 0; j < personas.size(); j++) {
                fila = hoja.createRow(indiceFila);
                Persona persona = personas.get(j);
                fila.createCell(0).setCellValue(persona.getNombre());
                fila.createCell(1).setCellValue(persona.getWeb());
                fila.createCell(2).setCellValue(persona.getEdad());
                indiceFila++;
            }
        }
        // Guardamos
        File directorioActual = new File(".");
        String ubicacion = directorioActual.getAbsolutePath();
        String ubicacionArchivoSalida = ubicacion.substring(0, ubicacion.length() - 1) + nombreArchivo;
        FileOutputStream outputStream;

        try {
            outputStream = new FileOutputStream(ubicacionArchivoSalida);
            libro.write(outputStream);
            libro.close();
            System.out.println("Libro de personas guardado correctamente");
        } catch (FileNotFoundException ex) {
            System.out.println("Error de filenotfound");
        } catch (IOException ex) {
            System.out.println("Error de IOException");
        }

    }

    public static void main(String[] args) {
        crearAPartirDeArrayList();
        Workbook libro = new XSSFWorkbook();
        final String nombreArchivo = "Mi archivo creado con Java.xlsx";
        Sheet hoja = libro.createSheet("Hoja 2");
        Row primeraFila = hoja.createRow(0);
        Cell primeraCelda = primeraFila.createCell(0);
        primeraCelda.setCellValue("Yo voy en la primera celda y primera fila");
        File directorioActual = new File(".");
        String ubicacion = directorioActual.getAbsolutePath();
        String ubicacionArchivoSalida = ubicacion.substring(0, ubicacion.length() - 1) + nombreArchivo;
        FileOutputStream outputStream;
        try {
            outputStream = new FileOutputStream(ubicacionArchivoSalida);
            libro.write(outputStream);
            libro.close();
            System.out.println("Libro guardado correctamente");
        } catch (FileNotFoundException ex) {
            System.out.println("Error de filenotfound");
        } catch (IOException ex) {
            System.out.println("Error de IOException");
        }
    }
}
